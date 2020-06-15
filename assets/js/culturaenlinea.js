MapasCulturais.geocoder.country = 'uy';
MapasCulturais.defaultViewModeToList = true;
MapasCulturais.postalCodeMask = '00000'
MapasCulturais.phoneMasks = false; //['0000.00009', '000.000.000']


jQuery(document).ready(function() {
    // TODO isso é um workaround para excluir campos sem sobreescrever todo o template da single, precisa ser melhorado
    
    jQuery('span[data-edit="orientacaoSexual"]').parents('p.privado').remove();
    jQuery('span[data-edit="raca"]').parents('p.privado').remove();
    
});
