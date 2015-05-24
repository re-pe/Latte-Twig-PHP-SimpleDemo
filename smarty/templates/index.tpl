{include file="header.tpl" title=$title}

    <h2>{$engine}</h2>
    {if isset($pages) and is_array($pages) > 0 }
        <ul>
        {foreach $pages as $id => $page }
            {if $page  == $currentPage }
                <li class="current">{$page|escape}</li>
            {else}
                <li>{$page|escape}</li>
            {/if}
        {/foreach}
        </ul>
    {else}
        <p>empty</p>
    {/if}

{include file="footer.tpl"}
