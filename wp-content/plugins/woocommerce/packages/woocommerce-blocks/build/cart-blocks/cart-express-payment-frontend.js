(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[20],{111:function(e,t,s){"use strict";var c=s(0);t.a=function(e){let{icon:t,size:s=24,...n}=e;return Object(c.cloneElement)(t,{width:s,height:s,...n})}},474:function(e,t,s){"use strict";s.r(t);var c=s(0),n=s(36),r=s(5),o=s.n(r),a=s(1),i=s(313),l=s(136),m=s(42),u=s(145),p=s(4),b=s(3),E=s(376);s(375);var g=()=>{const{paymentMethods:e,isInitialized:t}=Object(i.a)(),{isCalculating:s,isProcessing:n,isAfterProcessing:r,isBeforeProcessing:o,isComplete:g,hasError:O}=Object(p.useSelect)(e=>{const t=e(b.CHECKOUT_STORE_KEY);return{isCalculating:t.isCalculating(),isProcessing:t.isProcessing(),isAfterProcessing:t.isAfterProcessing(),isBeforeProcessing:t.isBeforeProcessing(),isComplete:t.isComplete(),hasError:t.hasError()}}),{paymentStatus:j}=Object(p.useSelect)(e=>({paymentStatus:e(b.PAYMENT_STORE_KEY).getCurrentStatus()}));if(!t||t&&0===Object.keys(e).length)return null;const d=n||r||o||g&&!O;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(u.a,{isLoading:s||d||j.isDoingExpressPayment},Object(c.createElement)("div",{className:"wc-block-components-express-payment wc-block-components-express-payment--cart"},Object(c.createElement)("div",{className:"wc-block-components-express-payment__content"},Object(c.createElement)(l.a,{context:m.d.EXPRESS_PAYMENTS}),Object(c.createElement)(E.a,null)))),Object(c.createElement)("div",{className:"wc-block-components-express-payment-continue-rule wc-block-components-express-payment-continue-rule--cart"},Object(a.__)("Or","woocommerce")))};t.default=e=>{let{className:t}=e;const{cartNeedsPayment:s}=Object(n.a)();return s?Object(c.createElement)("div",{className:o()("wc-block-cart__payment-options",t)},Object(c.createElement)(g,null)):null}}}]);