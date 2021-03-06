{* Modified by tommy from cs-cart.jp 2017 *}

{foreach from=$fields item="field"}
{if $field.is_default == "N" && (!$exclude_kana || !$field.field_id|fn_lcjp_is_kana_field) }
{assign var="value" value=$order_info.fields[$field.field_id]}
<p>
    {$field.description}:
    {if "AOL"|strpos:$field.field_type !== false} {* Titles/States/Countries *}
        {assign var="title" value="`$field.field_id`_descr"}
        {$user_data.$title}
    {elseif $field.field_type == "C"}  {* Checkbox *}
        {if $value == "Y"}{__("yes")}{else}{__("no")}{/if}
    {elseif $field.field_type == "D"}  {* Date *}
        {$value|date_format:$settings.Appearance.date_format}
    {elseif "RS"|strpos:$field.field_type !== false}  {* Selectbox/Radio *}
        {$field.values.$value}
    {else}  {* input/textarea *}
        {$value|default:"-"}
    {/if}
</p>
{/if}
{/foreach}