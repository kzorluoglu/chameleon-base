<?php
if (TGlobal::CMSUserDefined()) {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            saveCMSRegistryEntry('dialogCloseButtonText', '<?=TGlobal::OutJS(TGlobal::Translate('chameleon_system_core.action.close')); ?>');
        });
    </script>

    <div class="modal" id="processingModal" tabindex="-1" role="dialog" aria-labelledby="processingDialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="alert alert-warning mb-0" role="alert">
                    <div class="lds-ring float-left mr-1">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="pt-2">
                        <strong><?= nl2br(TGlobal::Translate('chameleon_system_core.text.wait')); ?></strong></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// message garbage collection
// dirty hack to prevent message shown on wrong table editor or table list instance
$oMessageManager = TCMSMessageManager::GetInstance();
$oMessageManager->ClearMessages();
