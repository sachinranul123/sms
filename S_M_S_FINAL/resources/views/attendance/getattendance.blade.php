@include('includes.header')
<style>
    .clock {
        position: absolute;
        top: 10%;
        left: 80%;

        transform: translateX(-50%) translateY(-50%);
        color: #00193a;
        font-size: 30px;
        font-family: Orbitron;
        letter-spacing: 7px;
    }

</style>

<div class="card">
    <div class="card-header" align="center">

        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
       <h1>GET ATTENDANCE</h1>
    </div>
    <div class="card-body">

        <label for=""><h3>Date</h3></label>
        <h3><div  id="output" ></div></h3>
    </div>
</div>

<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h == 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();
</script>
<script>
    var today = new Date();

    var day = today.getDate();
    var month = today.getMonth() + 1;
    var year = today.getFullYear();

    if (day < 10) {
        day = '0' + day
    }
    if (month < 10) {
        month = '0' + month
    }

    var out = document.getElementById("output");

    out.innerHTML = day + "/" + month + "/" + year;
</script>

@include('includes.footer')
