"use strict"
angular.module("SELTEX")
.controller("TabController", function () {
	var tab = 1;
	this.setTab = function (value){
		 tab=value;
	};
	this.isSet = function (value){
		return tab===value;
	};
});