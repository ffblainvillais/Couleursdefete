// ##### widget pour les fenetres modal ##### //
$.widget("agc.widgetModal", {
     
    _create: function ()
    {
        var that = this;
        
        //pour les modifs
        that.getElementModif().click(function(){
                        
            $.post($(this).data('url')).done(function (res) {
                $('#cible').html(res);
            });
        });
        
        //pour le contact client individuel
        that.getElementContact().click(function(){
            console.log(that.getUrl());
                        
            $.post($(this).data('url')).done(function (res) {
                $('#cible').html(res);
            });
        });
    },
    
    //Ok
    getElementModif: function () {
        return this.element.find('#modifModal');
    },
    
    getElementContact: function () {
        return this.element.find('#contactModal');
    },
    
    //Bancale !
    getElementCible: function () {
        return this.element.find('#cible');
    },
    
    //Bancale !
    getUrl: function () {
        return this.element.data('url');
    }

});


// ##### widget pour les fenetres popover ##### //
$.widget("agc.widgetPopover", {
     
    _create: function ()
    {
        var that = this;

        that.getElementModif().click(function(){
                        
            $.post($(this).data('url')).done(function (res) {
                $(this).data('content').html(res);
            });
        });
    },
    
    //Ok
    getElementModif: function () {
        return this.element.find('#modifPopover');
    },
    
    //Bancale !
    getElementCible: function () {
        return this.element.find('#cible');
    },
    
    //Bancale !
    getUrl: function () {
        return $(this).data('url');
    }

});

$(function ()
{
    WidgetInitializer.add('MODAL', 'widgetModal');
    WidgetInitializer.add('POPOVER', 'widgetPopover');

});