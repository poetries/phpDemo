;(function($){
	$.fn.table=function(options){
		var defaults = {
			//各种参数 各种属性
			evenRowClass:'evenRow',
			oddRowClass:'oddRow',
			currentClass:'currentRow'
		}
		var options = $.extend(defaults,options);//options继承了defaults中的属性

		this.each(function(){
			//实现功能的代码
			var _this = $(this);//把this缓存起来 重复利用
			//偶数行
			_this.find('tr:even').addClass(options.evenRowClass);

			//奇数行
			_this.find('tr:odd').addClass(options.oddRowClass);

			//鼠标放上去和鼠标离开
			_this.find('tr').mouseover(function() {
				$(this).addClass(options.currentClass);
			}).mouseout(function() {
				$(this).removeClass(options.currentClass);
			});
		});
	}
})(jQuery);  