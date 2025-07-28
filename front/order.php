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
    text-align:left;
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

<script>
    let url=new URLSearchParams(location.search);

    getMovie();

    $("#movie").on("change",function name(params) {
        getDate($(this).val())
    })

    $("#date").on("change",function name(params) {
        getSession($("#movie").val(),$(this).val())
        
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