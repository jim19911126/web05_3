<h3 class="ct">線上訂票</h3>

<style>
#orderForm{
    width:50%;
    margin:10px auto;
    padding:20px;
    border:1px solid #ccc;
    background:#aaa;
}    
#orderForm td{
    background:#ccc;
}
#orderForm td:nth-child(1){
    width:20%;
    text-align:right;
}
#orderForm td:nth-child(2) select{
    width:98%;
    text-align:right;
}
</style>

<table id="orderForm">
    <tr>
        <td>電影</td>
        <td><select name="movie" id="movie"></select></td>
    </tr>
    <tr>
        <td>日期</td>
        <td><select name="date" id="date"></select></td>
    </tr>
    <tr>
        <td>場次</td>
        <td><select name="session" id="session"></select></td>
    </tr>
</table>
<div class="ct">
    <button>確定</button>
    <button>重製</button>
</div>