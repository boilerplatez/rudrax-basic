<!DOCTYPE html>
<html>
<head>
    {include file="head.tpl"}
</head>
<body>

<form method="POST" action="/items">
    Enter Title : <input value="" name="title">
    Enter Quantity : <input value="" name="quantity">
    <button type="submit"> Add</button>
</form>

<table>
    {foreach $items as $item}
        <tr>
            <td>
                {$item.title}
            </td>
            <td>
                {$item.quantity}
            </td>
        </tr>
    {/foreach}
</table>

</body>
</html>