<!-- Modals -->
<div id="modal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="loader pt10 pb10"></div>
            </div>
        </div>
    </div>
</div>

<script id="modal-message" type="text/template">
    <div class="modal-body">
        <p>{literal}{{message}}{/literal}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">{__("Cerrar")}</button>
    </div>
</script>

<script id="modal-success" type="text/template">
    <div class="modal-body text-center">
        <h4>{literal}{{title}}{/literal}</h4>
        <p class="mt20">{literal}{{message}}{/literal}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">{__("Cerrar")}</button>
    </div>
</script>

<script id="modal-error" type="text/template">
    <div class="modal-body text-center">
        <h4>{literal}{{title}}{/literal}</h4>
        <p class="mt20">{literal}{{message}}{/literal}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">{__("Cerrar")}</button>
    </div>
</script>

<script id="modal-loading" type="text/template">
    <div class="modal-body text-center">
        <div class="spinner-border text-primary"></div>
    </div>
</script>
<!-- Modals -->