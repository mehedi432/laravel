(window.webpackJsonp=window.webpackJsonp||[]).push([[46],{587:function(e,t,n){"use strict";n.r(t);var a=n(5),r=n.n(a),o=[{title:"Name",dataIndex:"name",key:"name",sorter:!0},{title:"Action",key:"action",scopedSlots:{customRender:"action"},sorter:!1,width:"10%"}],i={props:["baseUrl","taxRates"],data:function(){return{columns:o}},methods:{handleTableChange:function(e,t,n){this.taxRates.sort((function(e,t){var a=n.columnKey,o=n.order;if(r()(e[a])&&(e[a]=""),r()(t[a])&&(t[a]=""),"ascend"===o){if(e[a]<t[a])return-1;if(e[a]>t[a])return 1}if("descend"===o){if(e[a]>t[a])return-1;if(e[a]<t[a])return 1}return 0}))},getEditUrl:function(e){return this.baseUrl+"/tax-rate/"+e.id+"/edit"},getDeleteUrl:function(e){return this.baseUrl+"/tax-rate/"+e.id},deleteTaxRate:function(e){var t=this.baseUrl+"/tax-rate/"+e.id,n=this;this.$confirm({title:"Do you Want to delete "+e.name+" tax-rate?",okType:"danger",onOk:function(){axios.delete(t).then((function(e){!0===e.data.success&&n.$notification.error({key:"tax-rate.delete.success",message:e.data.message}),window.location.reload()})).catch((function(e){n.$notification.error({key:"tax-rate.delete.error",message:e.message})}))},onCancel:function(){}})}}},s=n(6),c=Object(s.a)(i,void 0,void 0,!1,null,null,null);t.default=c.exports}}]);