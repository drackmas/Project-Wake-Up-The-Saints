(function () {var a={data:function(){return{isHidden:JSON.parse(sessionStorage.getItem("kirby.fieldsBlock.".concat(this.$attrs.endpoints.field,".").concat(this.$attrs.id)))}},methods:{toggle:function(){this.isHidden=!this.isHidden,sessionStorage.setItem("kirby.fieldsBlock.".concat(this.$attrs.endpoints.field,".").concat(this.$attrs.id),this.isHidden)},preventSelect:function(t){t.detail>1&&t.preventDefault()}}};if(typeof a==="function"){a=a.options}Object.assign(a,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("div",{staticClass:"k-block-fields-preview",on:{"mousedown":_vm.preventSelect}},[_vm.fieldset.label===null||_vm.fieldset.label?_c("k-block-title",{class:{"with-border":!_vm.isHidden},attrs:{"content":_vm.content,"fieldset":_vm.fieldset},on:{"dblclick":_vm.toggle}}):_vm._e(),_vm._v(" "),!_vm.isHidden?_c("k-form",{ref:"form",attrs:{"autofocus":true,"fields":_vm.fieldset.tabs.content.fields,"value":_vm.$helper.clone(_vm.content)},on:{"input":function($event){return _vm.$emit("update",$event)}}}):_vm._e()],1)};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:null,functional:undefined}}());panel.plugin("jg/fields-block",{blocks:{fields:a}});})();