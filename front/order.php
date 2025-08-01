<style>
#orderTable{
    width:50%;
    margin:10px auto;
    padding:20px;
    border:1px solid #ccc;
    background:#aaa;
}    
#orderTable td{
    background:#ccc;
}
#orderTable td:nth-child(1){
    width:20%;
    text-align:right;
}
#orderTable td:nth-child(2) select{
    width:98%;
    text-align:left;
}
</style>

<div id="orderForm">
    
    <h3 class="ct">線上訂票</h3>
    
    
    <table id="orderTable">
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
        <button class="btn-submit">確定</button>
        <button class="btn-reset">重製</button>
    </div>
</div>

<div id="assign" style="display: none;">
劃位

<button class="btn-prev">上一步</button>
<button class="btn-book">訂購</button>
</div>

<script>
    let url=new URLSearchParams(location.search);

    getMovie();

    $("#movie").on("change",function name(params) {
        getDate($(this).val())
    })

    $("#date").on("change",function name(params) {
        getSession($("#movie").val(),$(this).val())
        
    })

    // 按鈕切換
    $(".btn-submit").on("click",function name(params) {
        $("#orderForm").hide();
        $("#assign").show();

    })

    $(".btn-prev").on("click",function name(params) {
        $("#assign").hide();
        $("#orderForm").show();
    })

    function getMovie(params) {
        let id=0
        if(url.has('id')){
            id=url.get('id');
        }
        $.get("./api/get_movie.php",{id},(movies)=>{
            $('#movie').html(movies)
            
            getDate($("#movie").val());
        })
    }

    function  getDate(movieId) {
        $.get("./api/get_date.php",{movieId},(dates)=>{
            $("#date").html(dates)

            getSession(movieId,$('#date').val())
        })
        
    }

    function getSession(movieId,date) {
        $.get("./api/get_session.php",{movieId,date},(sessions)=>{
            $("#session").html(sessions)
        })
        
    }
</script>