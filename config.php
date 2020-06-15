<?php

return array(

    'app.geoDivisionsHierarchy' => [
            '_departamento'        => \MapasCulturais\i::__('Departamento'),        // metadata: geoDepartamento
        ],
        
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => \MapasCulturais\i::__('Agente responsável pela inscrição'),
        'agentRelationGroupName' => 'owner',
        'description' => 'Agente individual (persona física) con los campos CI y Email Privado completos',
        'type' => 1,
        'requiredProperties' => array('documento', 'emailPrivado')
    ),
    
    
    // TODO: remover isto daqui depois que refatorar o config
    'app.entityPropertiesLabels' => array(
        '@default' => array(
            'id' => \MapasCulturais\i::__('Id'),
            'name' => \MapasCulturais\i::__('Nome'),
            'createTimestamp' => \MapasCulturais\i::__('Data de Criação'),
            'updateTimestamp' => \MapasCulturais\i::__('Data de Atualização'),
            'shortDescription' => \MapasCulturais\i::__('Descrição Curta'),
            'longDescription' => \MapasCulturais\i::__('Descrição Longa'),
            'certificateText' => \MapasCulturais\i::__('Conteúdo da Impressão do Certificado'),
            'validPeriod'	=> \MapasCulturais\i::__('Período de Validade'),
            'status' => \MapasCulturais\i::__('Status')
        ),

        //        'MapasCulturais\Entities\Agent' => array()
    ),
    
    'routes' => array(
        'default_controller_id' => 'site',
        'default_action_name' => 'index',
        'shortcuts' => array(
            // exemplos de shortcut adicionando parametros
            'james-bond'                => array('agent', 'single', array('id' => 7)),
            // 'agente/007'                => array('agent', 'single', array('id' => '007')),
            // 'teste/de/shortcut/longo'   => array('agent', 'single', array('id' => 'shortcut longo')),
            //'historico' => array('entityRevision','history',array('entity' => 'event','id' => '6')),
            'historico' => array('entityRevision','history'),
            'evento'    => array('event',   'single'),
            'usuario'   => array('user',    'single'),
            'agente'    => array('agent',   'single'),
            'espacio'    => array('space',   'single'),
            'proyecto'   => array('project', 'single'),
            'instalacion'=> array('subsite',    'single'),
             'sello'       => array('seal',    'single'),
            'salir'      => array('auth',    'logout'),
            'busqueda'     => array('site',    'search'),
            'acerca'     => array('site',    'page', array('sobre')),
            'como-usar' => array('site',    'page', array('como-usar')),

            // workflow actions
            'aprobar-notificacion' => array('notification', 'approve'),
            'rechazar-notificacion' => array('notification', 'reject'),

            'inscripcion' => array('registration', 'view'),
            'certificado' => array('relatedSeal','single'),


        ),
        'controllers' => array(
            'panel'         => 'panel',
            'autenticacion'   => 'auth',
            'sitio'           => 'site',
            'eventos'        => 'event',
            'agentes'        => 'agent',
            'espacios'        => 'space',
            'archivos'       => 'file',
            'proyectos'       => 'project',
            'sellos'          => 'seal',
            'inscripciones'     => 'registration',
            'instalaciones'    => 'subsite',
            'anexos'         => 'registrationfileconfiguration',
            'revisiones'       => 'entityRevision',
            'historico'      => 'entityRevision'
        ),
        'actions' => array(
            'lista'         => 'list',
            'borra'         => 'delete',
            'edita'         => 'edit',
            'espacios'       => 'spaces',
            'agentes'       => 'agents',
            'eventos'       => 'events',
            'proyectos'      => 'projects',
            'subsitio'       => 'subsite',
            'sellos'         => 'seals',
            'inscripciones'    => 'registrations',
            'agente'        => 'agent',
            'evento'        => 'event'
        ),

        'readableNames' => array(
            //controllers

            'panel'         => \MapasCulturais\i::__('Painel'),
            'auth'          => \MapasCulturais\i::__('Autenticação'),
            'site'          => \MapasCulturais\i::__('Site'),
            'event'         => \MapasCulturais\i::__('Evento'),    'events'        => \MapasCulturais\i::__('Eventos'),
            'agent'         => \MapasCulturais\i::__('Agente'),    'agents'        => \MapasCulturais\i::__('Agentes'),
            'space'         => \MapasCulturais\i::__('Espaço'),    'spaces'        => \MapasCulturais\i::__('Espaços'),
            'project'       => \MapasCulturais\i::__('Projeto'),   'projects'      => \MapasCulturais\i::__('Projetos'),
            'registration'  => \MapasCulturais\i::__('Inscrição'), 'registrations' => \MapasCulturais\i::__('Inscrições'),
            'file'          => \MapasCulturais\i::__('Arquivo'),   'files'         => \MapasCulturais\i::__('Arquivos'),
            'seal'          => \MapasCulturais\i::__('Selo'),      'seals'         => \MapasCulturais\i::__('Selos'),
            'entityRevision'=> \MapasCulturais\i::__('Histórico'), 'revisions'     => \MapasCulturais\i::__('Revisões'),
            'sealrelation'  => \MapasCulturais\i::__('Certificado'),
            //actions
            'subsite'       => \MapasCulturais\i::__('Subsite'),
            'list'          => \MapasCulturais\i::__('Listando'),
            'index'         => \MapasCulturais\i::__('Índice'),
            'delete'        => \MapasCulturais\i::__('Apagando'),
            'edit'          => \MapasCulturais\i::__('Editando'),
            'create'        => \MapasCulturais\i::__('Criando novo'),
            'search'        => \MapasCulturais\i::__('Busca')
        )
    ),
    /* =======================  ============================== */
    'registration.agentRelationsOptions' => array(
        'dontUse' => \MapasCulturais\i::__('Não utilizar'),
        'required' => \MapasCulturais\i::__('Obrigatório'),
        'optional' => \MapasCulturais\i::__('Opcional')
    ),

    'registration.propertiesToExport' => array(
        'id',
        'name',
        'nomeCompleto',
        'documento',
        'dataDeNascimento',
        'genero',
        'raca',
        'location',
        'endereco',
        'En_CEP',
        'En_Nome_Logradouro',
        'En_Num',
        'En_Complemento',
        'En_Bairro',
        'En_Municipio',
        'En_Estado',
        'telefone1',
        'telefone2',
        'telefonePublico',
        'emailPrivado',
        'emailPublico',
        'site',
        'googleplus',
        'facebook',
        'twitter'
    ),
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => \MapasCulturais\i::__('Agente responsável pela inscrição'),
        'agentRelationGroupName' => 'owner',
        'description' => \MapasCulturais\i::__('Agente individual (pessoa física) com os campos CPF, Data de Nascimento/Fundação, Email Privado e Telefone 1 obrigatoriamente preenchidos'),
        'type' => 1,
        'requiredProperties' => array('documento', 'raca', 'dataDeNascimento', 'genero', 'emailPrivado', 'telefone1')
    ),
    'registration.agentRelations' => array(
        array(
            'required' => false,
            'label' => \MapasCulturais\i::__('Instituição responsável'),
            'agentRelationGroupName' => 'instituicao',
            'description' => \MapasCulturais\i::__('Agente coletivo (pessoa jurídica) com os campos CNPJ, Data de Nascimento/Fundação, Email Privado e Telefone 1 obrigatoriamente preenchidos'),
            'type' => 2,
            'requiredProperties' => array('documento', 'dataDeNascimento', 'emailPrivado', 'telefone1')
        ),
        array(
            'required' => false,
            'label' => \MapasCulturais\i::__('Coletivo'),
            'agentRelationGroupName' => 'coletivo',
            'description' => \MapasCulturais\i::__('Agente coletivo sem CNPJ, com os campos Data de Nascimento/Fundação e Email Privado obrigatoriamente preenchidos'),
            'type' => 2,
            'requiredProperties' => array('dataDeNascimento', 'emailPrivado')
        )
    ),

    /* ============ ENTITY PROPERTIES SEALS ============= */
    'app.entityPropertiesLabels' => array(
        '@default' => array(
            'id' => \MapasCulturais\i::__('Id'),
            'name' => \MapasCulturais\i::__('Nome'),
            'createTimestamp' => \MapasCulturais\i::__('Data de Criação'),
            'updateTimestamp' => \MapasCulturais\i::__('Data de Atualização'),
            'shortDescription' => \MapasCulturais\i::__('Descrição Curta'),
            'longDescription' => \MapasCulturais\i::__('Descrição Longa'),
            'certificateText' => \MapasCulturais\i::__('Conteúdo da Impressão do Certificado'),
            'validPeriod'	=> \MapasCulturais\i::__('Período de Validade'),
            'status' => \MapasCulturais\i::__('Status')
        ),

        //        'MapasCulturais\Entities\Agent' => array()
    ),
/* ======================= ! ============================== */

);


