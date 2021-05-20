@if (isset($operation))
@if ($operation === "create")
<div class="alert alert-success" role="alert">
    {{$entity}} a été ajouté.
</div>

@elseif ($operation === "update")
<div class="alert alert-warning" role="alert">
    {{$entity}} a été mis à jour.
</div>

@elseif ($operation === "delete")
<div class="alert alert-danger" role="alert">
    {{$entity}} a été supprimé.
</div>
@endif
@endif