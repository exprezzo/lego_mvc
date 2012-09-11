//http://tdg-i.com/52/tdgiiconmgr-and-iconbrowser-update

Ext.ns('Ext.ux', 'Ext.ux.TDGi');
Ext.ux.TDGi.iconMgr = function(iconName) {
	var iconBase = 'TDGi.iconMgr';

	var ruleBodyTpl  = ' \n\r .{0} {  background-image: url({1}) !important; }';

	this.styleSheetNum = document.styleSheets.length;
	var styleSheetId = 'TDGi_iconMgr_' + Ext.id();
	var styleSheet = Ext.get(Ext.util.CSS.createStyleSheet('/* TDG-i.iconMgr stylesheet */\n', styleSheetId));

	var imgExtension = (Ext.isIE6) ? '.png' : '.png';

	var cssClasses = new Ext.data.JsonStore({
		autoLoad : false,
		fields   : [
			{
				name    : 'name',
				mapping : 'name'
			},
			{
				name    : 'cssRule',
				mapping : 'cssRule'
			},
			{
				name    : 'styleBody',
				mapping : 'styleBody'
			}
		]
	});

	return  {
		getIcon : function(icon) {

			var cls         = 'tdgi_icon_' + Ext.id();
			var iconImgPath = icon;
			var styleBody   = String.format(ruleBodyTpl, cls, iconImgPath);

			var foundIcon = cssClasses.findBy(function(rec, ind){
				if(rec.data.name == icon) {
					 return(ind);
				}
			});

			if (foundIcon < 0) {
				cssClasses.add(new Ext.data.Record({
					name     : icon,
					cssRule  : cls,
					styleTxt : styleBody
				}));
				var styleSheet = Ext.get(styleSheetId);

				//document.getElementById('TDGi.iconMgr').sheet.s
				if (! Ext.isIE) {
					styleSheet.dom.sheet.insertRule(styleBody, styleSheet.dom.sheet.cssRules.length);
				}
				else {
					// Per http://www.quirksmode.org/dom/w3c_css.html#properties
					document.styleSheets[styleSheetId].cssText += styleBody;
				}
				Ext.util.CSS.refreshCache();

				return(cls);
			}
			else {
				return(cssClasses.getAt(foundIcon).data.cssRule);
			}

		}
	}
}();


