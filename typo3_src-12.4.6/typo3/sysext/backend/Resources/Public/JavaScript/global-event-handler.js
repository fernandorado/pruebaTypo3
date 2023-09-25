/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import documentService from"@typo3/core/document-service.js";import RegularEvent from"@typo3/core/event/regular-event.js";import Viewport from"@typo3/backend/viewport.js";class GlobalEventHandler{constructor(){this.options={onChangeSelector:'[data-global-event="change"]',onClickSelector:'[data-global-event="click"]',onSubmitSelector:'form[data-global-event="submit"]'},documentService.ready().then((()=>this.registerEvents()))}registerEvents(){new RegularEvent("change",this.handleChangeEvent.bind(this)).delegateTo(document,this.options.onChangeSelector),new RegularEvent("click",this.handleClickEvent.bind(this)).delegateTo(document,this.options.onClickSelector),new RegularEvent("submit",this.handleSubmitEvent.bind(this)).delegateTo(document,this.options.onSubmitSelector)}handleChangeEvent(e,t){e.preventDefault(),this.handleFormChildAction(e,t)||this.handleFormChildNavigateAction(e,t)}handleClickEvent(e,t){e.preventDefault(),this.handleFormChildAction(e,t)}handleSubmitEvent(e,t){e.preventDefault(),this.handleFormNavigateAction(e,t)}handleFormChildAction(e,t){const n=t.dataset.actionSubmit,l=t.dataset.actionFocus;if(!n&&!l)return!1;let a=null;const o=t.closest("form");if(n){const e="$form"!==n?document.querySelector(n):null;if("$form"===n&&this.isHTMLFormChildElement(t)?a=t.form:"$form"===n&&o?a=o:e instanceof HTMLFormElement&&(a=e),!(a instanceof HTMLFormElement))return!1;this.assignFormValues(a,t),a.submit()}if(l&&o){if(!(o instanceof HTMLFormElement))return!1;const e=o.querySelector(l);if(null===e)return!1;e.focus()}return!0}assignFormValues(e,t){const n=t.dataset.formValues,l=n?JSON.parse(n):null;return null!==l&&l instanceof Object&&(Object.entries(l).forEach((([t,n])=>{let l=e.querySelector("[name="+CSS.escape(t)+"]");l instanceof HTMLElement?this.assignHTMLFormChildElementValue(l,n.toString()):(l=document.createElement("input"),l.setAttribute("type","hidden"),l.setAttribute("name",t),l.setAttribute("value",n.toString()),e.appendChild(l))})),!0)}handleFormChildNavigateAction(e,t){const n=t.dataset.actionNavigate;if(!n)return!1;const l=this.resolveHTMLFormChildElementValue(t),a=t.dataset.navigateValue;let o=null;return"$data=~s/$value/"===n&&a&&null!==l?o=this.substituteValueVariable(a,l):"$data"===n&&a?o=a:"$value"===n&&l&&(o=l),null!==o&&(Viewport.ContentContainer.setUrl(o),!0)}handleFormNavigateAction(e,t){const n=t.action,l=t.dataset.actionNavigate;if(!n||!l)return!1;const a=t.dataset.navigateValue,o=t.dataset.valueSelector,i=this.resolveHTMLFormChildElementValue(t.querySelector(o));let r=null;return"$form=~s/$value/"===l&&a&&null!==i?r=this.substituteValueVariable(a,i):"$form"===l&&(r=n),null!==r&&(Viewport.ContentContainer.setUrl(r),!0)}substituteValueVariable(e,t){return e.replace(/(\$\{value\}|%24%7Bvalue%7D|\$\[value\]|%24%5Bvalue%5D)/gi,t)}isHTMLFormChildElement(e){return e instanceof HTMLSelectElement||e instanceof HTMLInputElement||e instanceof HTMLTextAreaElement}resolveHTMLFormChildElementValue(e){const t=e.getAttribute("type");if(e instanceof HTMLSelectElement)return e.options[e.selectedIndex].value;if(e instanceof HTMLInputElement&&"checkbox"===t){const t=e.dataset.emptyValue;return e.checked?e.value:void 0!==t?t:""}return e instanceof HTMLInputElement?e.value:null}assignHTMLFormChildElementValue(e,t){const n=e.getAttribute("type");if(e instanceof HTMLSelectElement)Array.from(e.options).some(((n,l)=>n.value===t&&(e.selectedIndex=l,!0)));else if(e instanceof HTMLInputElement&&"checkbox"===n){const n=e.dataset.emptyValue;void 0!==n&&n===t?e.checked=!1:e.value===t&&(e.checked=!0)}else e instanceof HTMLInputElement&&(e.value=t)}}export default new GlobalEventHandler;