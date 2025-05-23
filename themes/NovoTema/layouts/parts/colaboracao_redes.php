<?php
/** 
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
*/

$this->import('
    entity-field
    mc-card
    mc-container
');
?>
<mc-container>
    <mc-card>
        <mc-card__title>
            <h3>Colaboração e Redes</h3>
        </mc-card__title>
        <?php 
        $fields = [
            'rede_parceria_outras_instituicoes', 
            'rede_parceria_outras_instituicoes_se_sim', 
            'principais_desafios_integrar_redes_parcerias',
            'importancia_colaboracoes_desenvolvimento_cultural',
            'colaboracoes_outras_instituicoes_trazer_beneficios'
        ]; 
        ?>
        <?php foreach ($fields as $field): ?>
            <?php if($this->isEditable() || $entity->$field): ?>
                <p><br></p>
                <entity-field :entity="entity" classes="col-12" prop="<?php echo $field; ?>"></entity-field>
            <?php endif; ?>
        <?php endforeach; ?>
    </mc-card>
</mc-container>