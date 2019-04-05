<?php include '../assets/php/functions.php'; ?>

{{if parent == ~id}}
<li>
    <div class="category">
        <a href="#{{:slug}}">
            {{:name}}
        </a>
        {{if children > 0}}
        <button class="btn" type="button" data-toggle="collapse" data-target="#category-{{:id}}-sub" aria-expanded="false" aria-controls="category-{{:id}}-sub">
        </button>
        {{/if}}
    </div>
    {{if children > 0 ~id=id}}
    <ul class="collapse" id="category-{{:id}}-sub">
        {{for #view.ctx.root tmpl="nav-category-item-sub" ~id=id /}}
    </ul>
    {{/if}}
</li>
{{/if}}
