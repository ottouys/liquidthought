!function(){var e={31772:function(e,o,t){"use strict";var n=t(25148);function r(){}function i(){}i.resetWarningCache=r,e.exports=function(){function e(e,o,t,r,i,c){if(c!==n){var s=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw s.name="Invariant Violation",s}}function o(){return e}e.isRequired=e;var t={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:o,element:e,elementType:e,instanceOf:o,node:e,objectOf:o,oneOf:o,oneOfType:o,shape:o,exact:o,checkPropTypes:i,resetWarningCache:r};return t.PropTypes=t,t}},7862:function(e,o,t){e.exports=t(31772)()},25148:function(e){"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"}},o={};function t(n){var r=o[n];if(void 0!==r)return r.exports;var i=o[n]={exports:{}};return e[n](i,i.exports,t),i.exports}t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,{a:o}),o},t.d=function(e,o){for(var n in o)t.o(o,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:o[n]})},t.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};!function(){"use strict";t.r(n),t.d(n,{ADMIN_INSTALL_TIMESTAMP_OPTION_NAME:function(){return b},ALLOW_TRACKING_OPTION_NAME:function(){return h},CustomerEffortScore:function(){return _},CustomerEffortScoreModalContainer:function(){return oe},CustomerEffortScoreTracks:function(){return re},CustomerEffortScoreTracksContainer:function(){return se},CustomerFeedbackModal:function(){return m},CustomerFeedbackSimple:function(){return ae},FeedbackModal:function(){return ue},PRODUCT_MVP_CES_ACTION_OPTION_NAME:function(){return ee},QUEUE_OPTION_NAME:function(){return K},SHOWN_FOR_ACTIONS_OPTION_NAME:function(){return y},STORE_KEY:function(){return z},addCustomerEffortScoreExitPageListener:function(){return T},addExitPage:function(){return k},getExitPageData:function(){return C},getStoreAgeInWeeks:function(){return Q},removeCustomerEffortScoreExitPageListener:function(){return N},removeExitPage:function(){return O},triggerExitPageCesSurvey:function(){return M},useCustomerEffortScoreExitPageTracker:function(){return le}});var e={};t.r(e),t.d(e,{addCesSurvey:function(){return W},addCesSurveyForAnalytics:function(){return B},addCesSurveyForCustomerSearch:function(){return j},hideCesModal:function(){return V},hideProductMVPFeedbackModal:function(){return Y},setCesSurveyQueue:function(){return H},showCesModal:function(){return F},showProductMVPFeedbackModal:function(){return U}});var o={};t.r(o),t.d(o,{getCesSurveyQueue:function(){return G}});var r={};t.r(r),t.d(r,{getCesSurveyQueue:function(){return J},getVisibleCESModalData:function(){return $},isProductMVPFeedbackModalVisible:function(){return X}});var i=window.wp.element,c=t(7862),s=t.n(c),a=window.wp.i18n,u=window.wp.data,l=window.wp.components,d=window.wc.experimental;function m(e){let{recordScoreCallback:o,title:t=(0,a.__)("Please share your feedback","woocommerce"),description:n,firstQuestion:r,secondQuestion:c,defaultScore:s=NaN,onCloseModal:u,customOptions:m,shouldShowComments:p=((e,o)=>[e,o].some((e=>1===e||2===e)))}=e;const _=m&&m.length>0?m:[{label:(0,a.__)("Strongly disagree","woocommerce"),value:"1"},{label:(0,a.__)("Disagree","woocommerce"),value:"2"},{label:(0,a.__)("Neutral","woocommerce"),value:"3"},{label:(0,a.__)("Agree","woocommerce"),value:"4"},{label:(0,a.__)("Strongly Agree","woocommerce"),value:"5"}],[w,f]=(0,i.useState)(s||NaN),[g,b]=(0,i.useState)(s||NaN),[h,y]=(0,i.useState)(""),[S,v]=(0,i.useState)(!1),[E,C]=(0,i.useState)(!0),k=()=>{C(!1),u&&u()},O=(e,o)=>{const t=parseInt(e,10);o(t),v(!Number.isInteger(t))};return E?(0,i.createElement)(l.Modal,{className:"woocommerce-customer-effort-score",title:t,onRequestClose:k,shouldCloseOnClickOutside:!1},(0,i.createElement)(d.Text,{variant:"body",as:"p",className:"woocommerce-customer-effort-score__intro",size:14,lineHeight:"20px",marginBottom:"1.5em"},n||(0,a.__)("Your feedback will help create a better experience for thousands of merchants like you. Please tell us to what extent you agree or disagree with the statements below.","woocommerce")),(0,i.createElement)(d.Text,{variant:"subtitle.small",as:"p",weight:"600",size:"14",lineHeight:"20px"},r),(0,i.createElement)("div",{className:"woocommerce-customer-effort-score__selection"},(0,i.createElement)(l.RadioControl,{selected:w.toString(10),options:_,onChange:e=>O(e,f)})),c&&(0,i.createElement)(d.Text,{variant:"subtitle.small",as:"p",weight:"600",size:"14",lineHeight:"20px"},c),c&&(0,i.createElement)("div",{className:"woocommerce-customer-effort-score__selection"},(0,i.createElement)(l.RadioControl,{selected:g.toString(10),options:_,onChange:e=>O(e,b)})),"function"==typeof p&&p(w,g)&&(0,i.createElement)("div",{className:"woocommerce-customer-effort-score__comments"},(0,i.createElement)(l.TextareaControl,{label:(0,a.__)("How is that screen useful to you? What features would you add or change?","woocommerce"),help:(0,a.__)("Your feedback will go to the WooCommerce development team","woocommerce"),value:h,placeholder:(0,a.__)("Optional, but much apprecated. We love reading your feedback!","woocommerce"),onChange:e=>y(e),rows:5})),S&&(0,i.createElement)("div",{className:"woocommerce-customer-effort-score__errors",role:"alert"},(0,i.createElement)(d.Text,{variant:"body",as:"p"},(0,a.__)("Please provide feedback by selecting an option above.","woocommerce"))),(0,i.createElement)("div",{className:"woocommerce-customer-effort-score__buttons"},(0,i.createElement)(l.Button,{isTertiary:!0,onClick:k,name:"cancel"},(0,a.__)("Cancel","woocommerce")),(0,i.createElement)(l.Button,{isPrimary:!0,onClick:()=>{!Number.isInteger(w)||c&&!Number.isInteger(g)?v(!0):(C(!1),o(w,g,h))},name:"send"},(0,a.__)("Share","woocommerce")))):null}m.propTypes={recordScoreCallback:s().func.isRequired,title:s().string,firstQuestion:s().string.isRequired,secondQuestion:s().string,defaultScore:s().number,onCloseModal:s().func};const p=()=>{},_=e=>{let{recordScoreCallback:o,title:t,description:n,noticeLabel:r,firstQuestion:c,secondQuestion:s,onNoticeShownCallback:l=p,onNoticeDismissedCallback:d=p,onModalShownCallback:_=p,onModalDismissedCallback:w=p,icon:f,shouldShowComments:g=((e,o)=>[e,o].some((e=>1===e||2===e)))}=e;const[b,h]=(0,i.useState)(!0),[y,S]=(0,i.useState)(!1),{createNotice:v}=(0,u.useDispatch)("core/notices2");return(0,i.useEffect)((()=>{b&&(v("success",r||t,{actions:[{label:(0,a.__)("Give feedback","woocommerce"),onClick:()=>{S(!0),_()}}],icon:f,explicitDismiss:!0,onDismiss:d}),h(!1),l())}),[b]),b?null:y?(0,i.createElement)(m,{title:t,description:n,firstQuestion:c,secondQuestion:s,recordScoreCallback:o,onCloseModal:w,shouldShowComments:g}):null};_.propTypes={recordScoreCallback:s().func.isRequired,title:s().string,onNoticeShownCallback:s().func,onNoticeDismissedCallback:s().func,onModalShownCallback:s().func,icon:s().element,firstQuestion:s().string.isRequired,secondQuestion:s().string,shouldShowComments:s().func};var w=window.wc.data,f=window.wc.tracks,g=window.wc.navigation;const b="woocommerce_admin_install_timestamp",h="woocommerce_allow_tracking",y="woocommerce_ces_shown_for_actions",S="customer-effort-score-exit-page";let v=!1;const E=(0,u.resolveSelect)(w.OPTIONS_STORE_NAME).getOption(h).then((e=>{v="yes"===e})),C=()=>{if(!window.localStorage)return[];const e=window.localStorage.getItem(S),o=e?JSON.parse(e):[];return Array.isArray(o)?o:[]},k=async e=>{if(await E,!window.localStorage||!v)return;let o=C();o.find((o=>o===e))||o.push(e),o=o.slice(-10),window.localStorage.setItem(S,JSON.stringify(o))},O=e=>{if(!window.localStorage)return;let o=C();o=o.filter((o=>o!==e)),o=o.slice(-10),window.localStorage.setItem(S,JSON.stringify(o))},P={},T=(e,o)=>{P[e]=()=>{o()&&k(e)},window.addEventListener("unload",P[e])},N=e=>{P[e]&&window.removeEventListener("unload",P[e],{capture:!0})};function M(){var e;const o=C();if(null==o?void 0:o.length){if(!function(e){const o={import_products:()=>"product_importer"!==(0,g.getQuery)().page};return!o[e]||o[e]()}(o[0]))return;const t=function(e){switch(e){case"product_edit_view":case"editing_new_product":return{action:"editing_new_product"===e?"new_product":e,noticeLabel:(0,a.__)("How is your experience with editing products?","woocommerce"),title:(0,a.__)("How's your experience with editing products?","woocommerce"),description:(0,a.__)("We noticed you started editing a product, then left. How was it? Your feedback will help create a better experience for thousands of merchants like you.","woocommerce"),firstQuestion:(0,a.__)("The product editing screen is easy to use","woocommerce"),secondQuestion:(0,a.__)("The product editing screen's functionality meets my needs","woocommerce")};case"product_add_view":case"new_product":return{action:e,noticeLabel:(0,a.__)("How is your experience with creating products?","woocommerce"),title:(0,a.__)("How is your experience with creating products?","woocommerce"),description:(0,a.__)("We noticed you started creating a product, then left. How was it? Your feedback will help create a better experience for thousands of merchants like you.","woocommerce"),firstQuestion:(0,a.__)("The product creation screen is easy to use","woocommerce"),secondQuestion:(0,a.__)("The product creation screen's functionality meets my needs","woocommerce")};case"settings_change":return{action:e,icon:"⚙️",noticeLabel:(0,a.__)("Did you find the right setting?","woocommerce"),title:(0,a.__)("How’s your experience with settings?","woocommerce"),description:(0,a.__)("We noticed you started changing store settings, then left. How was it? Your feedback will help create a better experience for thousands of merchants like you.","woocommerce"),firstQuestion:(0,a.__)("The settings screen is easy to use","woocommerce"),secondQuestion:(0,a.__)("The settings screen's functionality meets my needs","woocommerce")};case"shop_order_update":return{action:e,icon:"📦",noticeLabel:(0,a.__)("How easy or difficult was it to update this order?","woocommerce"),title:(0,a.__)("How's your experience with orders?","woocommerce"),description:(0,a.__)("We noticed you started editing an order, then left. How was it? Your feedback will help create a better experience for thousands of merchants like you.","woocommerce"),firstQuestion:(0,a.__)("The order editing screen is easy to use","woocommerce"),secondQuestion:(0,a.__)("The order details screen's functionality meets my needs","woocommerce")};case"import_products":return{action:e,icon:"🔄",noticeLabel:(0,a.__)("How is your experience with importing products?","woocommerce"),title:(0,a.__)("How's your experience with importing products?","woocommerce"),description:(0,a.__)("We noticed you started importing products, then left. How was it? Your feedback will help create a better experience for thousands of merchants like you.","woocommerce"),firstQuestion:(0,a.__)("The product import screen is easy to use","woocommerce"),secondQuestion:(0,a.__)("The product import screen's functionality meets my needs","woocommerce")};default:return null}}(o[0]);(null===(e=null==t?void 0:t.title)||void 0===e?void 0:e.length)&&(0,u.dispatch)("wc/customer-effort-score").addCesSurvey({...t,pageNow:window.pagenow,adminPage:window.adminpage,props:{ces_location:"outside"}}),O(o[0])}}function Q(e){if(0===e)return null;const o=Date.now()-1e3*e;return Math.round(o/w.WEEK)}var x=window.wp.dataControls,D="SET_CES_SURVEY_QUEUE",L="ADD_CES_SURVEY",A="SHOW_CES_MODAL",R="HIDE_CES_MODAL",I="SHOW_PRODUCT_MVP_FEEDBACK_MODAL",q="HIDE_PRODUCT_MVP_FEEDBACK_MODAL";function H(e){return{type:D,queue:e}}function W(e){let{action:o,title:t,description:n,noticeLabel:r,firstQuestion:i,secondQuestion:c,icon:s,pageNow:a=window.pagenow,adminPage:u=window.adminpage,onsubmitLabel:l,props:d={}}=e;return{type:L,action:o,title:t,description:n,noticeLabel:r,firstQuestion:i,secondQuestion:c,icon:s,pageNow:a,adminPage:u,onsubmit_label:l,props:d}}function F(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},t=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{};return{type:A,surveyProps:e,onsubmit_label:e.onsubmitLabel||"",props:o,onSubmitNoticeProps:t,tracksProps:n}}function V(){return{type:R}}function B(){return W({action:"analytics_filtered",title:(0,a.__)("How easy was it to filter your store analytics?","woocommerce"),firstQuestion:(0,a.__)("The filters in the analytics screen are easy to use.","woocommerce"),secondQuestion:(0,a.__)("The filters' functionality meets my needs.","woocommerce"),pageNow:"woocommerce_page_wc-admin",adminPage:"woocommerce_page_wc-admin"})}function j(){return W({action:"ces_search",title:(0,a.__)("How easy was it to use search?","woocommerce"),firstQuestion:(0,a.__)("The search feature in WooCommerce is easy to use.","woocommerce"),secondQuestion:(0,a.__)("The search's functionality meets my needs.","woocommerce"),pageNow:"woocommerce_page_wc-admin",adminPage:"woocommerce_page_wc-admin",onsubmit_label:void 0,props:{search_area:"customer"}})}function U(){return{type:I}}function Y(){return{type:q}}const z="wc/customer-effort-score",K="woocommerce_ces_tracks_queue";function*G(){const e=yield(0,x.apiFetch)({path:`/wc-admin/options?options=${K}`});if(!e)throw new Error;yield H(e[K]||[])}function J(e){return e.queue}function $(e){return e.showCESModal?e.cesModalData:void 0}function X(e){return e.showProductMVPFeedbackModal}const Z={queue:[],cesModalData:void 0,showCESModal:!1,showProductMVPFeedbackModal:!1};(0,u.registerStore)(z,{actions:e,selectors:r,resolvers:o,controls:x.controls,reducer:function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:Z,o=arguments.length>1?arguments[1]:void 0;switch(o.type){case D:return{...e,queue:[...e.queue,...o.queue]};case R:return{...e,showCESModal:!1,cesModalData:void 0};case A:const t={action:o.surveyProps.action,title:o.surveyProps.title,onSubmitLabel:o.onSubmitLabel,firstQuestion:o.surveyProps.firstQuestion,secondQuestion:o.surveyProps.secondQuestion,onSubmitNoticeProps:o.onSubmitNoticeProps||{},props:o.props,tracksProps:o.tracksProps};return{...e,showCESModal:!0,cesModalData:t};case L:if(e.queue.filter((e=>e.action===o.action)).length)return e;const n={action:o.action,title:o.title,description:o.description,noticeLabel:o.noticeLabel,firstQuestion:o.firstQuestion,secondQuestion:o.secondQuestion,icon:o.icon,pagenow:o.pageNow,adminpage:o.adminPage,onSubmitLabel:o.onSubmitLabel,props:o.props};return{...e,queue:[...e.queue,n]};case I:return{...e,showProductMVPFeedbackModal:!0};case q:return{...e,showProductMVPFeedbackModal:!1};default:return e}}});const ee="woocommerce_ces_product_mvp_ces_action",oe=()=>{var e;const{createSuccessNotice:o}=(0,u.useDispatch)("core/notices"),{hideCesModal:t}=(0,u.useDispatch)(z),{storeAgeInWeeks:n,resolving:r,visibleCESModalData:c}=(0,u.useSelect)((e=>{const{getOption:o,hasFinishedResolution:t}=e(w.OPTIONS_STORE_NAME),{getVisibleCESModalData:n}=e(z),r=o(b)||0,i=null===r||!t("getOption",[b]);return{storeAgeInWeeks:Q(r),visibleCESModalData:n(),resolving:i}})),s=(e,t,r)=>{(0,f.recordEvent)("ces_feedback",{action:c.action,score:e,score_second_question:null!=t?t:null,score_combined:e+(null!=t?t:0),comments:r||"",store_age:n,...c.tracksProps}),o(c.onSubmitLabel||(0,a.__)("Thanks for the feedback. We'll put it to good use!","woocommerce"),c.onSubmitNoticeProps||{})};return!c||r?null:(0,i.createElement)(m,{title:c.title,firstQuestion:c.firstQuestion,secondQuestion:c.secondQuestion,recordScoreCallback:function(){var e,o;s(...arguments),t(),null===(o=null===(e=c.props)||void 0===e?void 0:e.onRecordScore)||void 0===o||o.call(e)},onCloseModal:()=>{var e,o;null===(o=null===(e=c.props)||void 0===e?void 0:e.onCloseModal)||void 0===o||o.call(e),t()},shouldShowComments:null===(e=c.props)||void 0===e?void 0:e.shouldShowComments})};var te=window.wp.compose;function ne(e){let{action:o,trackProps:t,title:n,description:r,noticeLabel:c,firstQuestion:s,secondQuestion:u,icon:l,onSubmitLabel:d=(0,a.__)("Thank you for your feedback!","woocommerce"),cesShownForActions:m,allowTracking:p,resolving:w,storeAgeInWeeks:g,updateOptions:b,createNotice:h}=e;const[S,v]=(0,i.useState)(!1);if(w)return null;if(!p)return null;if(m&&-1!==m.indexOf(o)&&!S)return null;const E=()=>{b({[y]:[o,...m||[]]})};return(0,i.createElement)(_,{recordScoreCallback:(e,n,r)=>{(0,f.recordEvent)("ces_feedback",{action:o,score:e,score_second_question:n,score_combined:e+n,comments:r||"",store_age:g,ces_location:"inside",...t}),h("success",d)},title:n,description:r,noticeLabel:c,firstQuestion:s,secondQuestion:u,onNoticeShownCallback:()=>{(0,f.recordEvent)("ces_snackbar_view",{action:o,store_age:g,ces_location:"inside",...t})},onNoticeDismissedCallback:()=>{(0,f.recordEvent)("ces_snackbar_dismiss",{action:o,store_age:g,ces_location:"inside",...t}),E()},onModalShownCallback:()=>{v(!0),(0,f.recordEvent)("ces_view",{action:o,store_age:g,ces_location:"inside",...t}),E()},onModalDismissedCallback:()=>{(0,f.recordEvent)("ces_view_dismiss",{action:o,store_age:g,ces_location:"inside",...t})},icon:(0,i.createElement)("span",{style:{height:21,width:21},role:"img","aria-label":(0,a.__)("Pencil icon","woocommerce")},l||"✏")})}ne.propTypes={action:s().string.isRequired,trackProps:s().object,title:s().string.isRequired,onSubmitLabel:s().string,cesShownForActions:s().arrayOf(s().string),allowTracking:s().bool,resolving:s().bool.isRequired,storeAgeInWeeks:s().number,updateOptions:s().func,createNotice:s().func};const re=(0,te.compose)((0,u.withSelect)((e=>{const{getOption:o,hasFinishedResolution:t}=e(w.OPTIONS_STORE_NAME),n=o(y),r=Q(o(b)||0);return{cesShownForActions:n,allowTracking:"yes"===(o(h)||"no"),storeAgeInWeeks:r,resolving:!t("getOption",[y])||null===r||!t("getOption",[b])||!t("getOption",[h])}})),(0,u.withDispatch)((e=>{const{updateOptions:o}=e(w.OPTIONS_STORE_NAME),{createNotice:t}=e("core/notices");return{updateOptions:o,createNotice:t}})))(ne);var ie=window.React;function ce(e){let{queue:o,resolving:t,clearQueue:n}=e;const r=o.filter((e=>e.pagenow===window.pagenow&&e.adminpage===window.adminpage));return(0,ie.useEffect)((()=>{r.length&&n()}),[r]),t?null:(0,i.createElement)(i.Fragment,null,r.map(((e,o)=>(0,i.createElement)(re,{key:o,action:e.action,description:e.description,noticeLabel:e.noticeLabel,firstQuestion:e.firstQuestion,secondQuestion:e.secondQuestion,icon:e.icon,title:e.title,onSubmitLabel:e.onsubmit_label,trackProps:e.props||{}}))))}ce.propTypes={queue:s().arrayOf(s().object),resolving:s().bool,clearQueue:s().func};const se=(0,te.compose)((0,u.withSelect)((e=>{const{getCesSurveyQueue:o,isResolving:t}=e(z);return{queue:o(),resolving:t("getOption",[K])}})),(0,u.withDispatch)((e=>{const{updateOptions:o}=e(w.OPTIONS_STORE_NAME);return{clearQueue:()=>{o({woocommerce_clear_ces_tracks_queue_for_page:{pagenow:window.pagenow,adminpage:window.adminpage}})}}})))(ce),ae=e=>{let{onSelect:o,label:t}=e;const n=[{tooltip:(0,a.__)("Very difficult","woocommerce"),value:1,emoji:"😞"},{tooltip:(0,a.__)("Difficult","woocommerce"),value:2,emoji:"🙁"},{tooltip:(0,a.__)("Neutral","woocommerce"),value:3,emoji:"😑"},{tooltip:(0,a.__)("Good","woocommerce"),value:4,emoji:"🙂"},{tooltip:(0,a.__)("Very good","woocommerce"),value:5,emoji:"😍"}];return(0,i.createElement)("div",{className:"customer-feedback-simple__container"},(0,i.createElement)(d.Text,{variant:"subtitle.small",as:"p",size:"13",lineHeight:"16px"},t),(0,i.createElement)("div",{className:"customer-feedback-simple__selection"},n.map((e=>(0,i.createElement)(l.Tooltip,{text:e.tooltip,key:e.value,position:"top center"},(0,i.createElement)(l.Button,{onClick:()=>{o(e.value)}},e.emoji))))))};function ue(e){let{onSubmit:o,title:t,description:n,onModalClose:r,children:c,isSubmitButtonDisabled:s,submitButtonLabel:a,cancelButtonLabel:u}=e;const[m,p]=(0,i.useState)(!0),_=()=>{p(!1),r&&r()};return m?(0,i.createElement)(l.Modal,{className:"woocommerce-feedback-modal",title:t,onRequestClose:_,shouldCloseOnClickOutside:!1},(0,i.createElement)(d.Text,{variant:"body",as:"p",className:"woocommerce-feedback-modal__description",size:14,lineHeight:"20px",marginBottom:"1.5em"},n),c,(0,i.createElement)("div",{className:"woocommerce-feedback-modal__buttons"},(0,i.createElement)(l.Button,{isTertiary:!0,onClick:_,name:"cancel"},u),(0,i.createElement)(l.Button,{isPrimary:!s,isSecondary:s,onClick:()=>{o(),p(!1)},name:"send",disabled:s},a))):null}ae.propTypes={onSelect:s().func.isRequired,label:s().string.isRequired},ue.propTypes={onSubmit:s().func.isRequired,title:s().string,description:s().string,onModalClose:s().func,isSubmitButtonDisabled:s().bool,submitButtonLabel:s().string,cancelButtonLabel:s().string};const le=(e,o)=>{const t=(0,i.useRef)(o);(0,i.useEffect)((()=>{t.current=o}),[o]),(0,i.useEffect)((()=>()=>{t.current&&k(e)}),[]),(0,i.useEffect)((()=>(T(e,(()=>o)),()=>{N(e)})),[o])}}(),(window.wc=window.wc||{}).customerEffortScore=n}();