<table class='table table-data table-hover table-fixed'>
    <tr>
    <td>
    xiaohong：<a href='/admin.php?m=message&f=reply&id=1' data-toggle='modal'>我女儿叫小红</a>
    </td>
  </tr>
  </table>
<a href='/admin.php?m=message&f=admin&type=comment' class='panel-action btn-count'>评论[1]</a>
<script>
$(document).ready(function()
{
    var panel = $('#widget' + 3);
    if(panel.find('.panel-actions > .panel-action').length == 0)
    {
       $('.btn-count').prependTo(panel.find('.panel-actions')).show();
    }
})
</script>
