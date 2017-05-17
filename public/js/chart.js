function create(candidatos) {
    var data = [
        /*{
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    }*/
        ];
   
    for(var i = 0; i<candidatos.length; i++){
        console.log(candidatos[i].nombre);
        var color = "#"+((1<<24)*Math.random()|0).toString(16);
        data.push({
            value: candidatos[i].porcentaje,
            color: color,
            highlight: color,
            label: candidatos[i].candidato + "("+candidatos[i].votos+")"
        });
        //
    }
    
    var option = {
    responsive: true,
    };
   
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("myChart").getContext('2d');
    var myLineChart = new Chart(ctx).Pie(data, option); //'Line' defines type of the chart.
};