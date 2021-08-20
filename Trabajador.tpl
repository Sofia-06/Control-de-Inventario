{include file="Cabeceras/Header.tpl"}
    <div class="row">
        <div class="col 4">
            {include file="Navs/Nav.tpl"}
        </div>

        <div class="col 1">
        </div>

        <div class="col 7">
            <h1>Trabajador</h1>
            {if isset($rol)}
                {if $rol=='entrada'}
                    {include file='Trabajador/Entrada.tpl'}
                {else if $rol=='salida'}
                    {include file='Trabajador/Salida.tpl'}
                {/if}
            {/if}
        </div>
    </div>
{include file="Cabeceras/Footer.tpl"} 