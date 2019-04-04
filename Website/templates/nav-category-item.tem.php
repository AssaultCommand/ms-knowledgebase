{{if parent == NULL}}
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
    {{if children > 0}}
    <ul class="collapse" id="category-{{:id}}-sub">
        
    </ul>
    {{/if}}
</li>
{{/if}}