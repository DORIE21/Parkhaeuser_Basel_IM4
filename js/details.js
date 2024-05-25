//haupt div auslesen
let detailcontainer = document.querySelector(".detail");

async function main(){
    //url auslesen (für URL parameter)
    let url = new URL(window.location.href);

    //fetch request für details
    let res = await fetch("api/getDetailsData.php?parkhaus="+url.searchParams.get("parkhaus")+"&time="+url.searchParams.get("time")).then((d) => d.json());

    //umformung der daten (prozentberechnung und datum)
    res = res.map((e) => {
        if(url.searchParams.get("time") === "24h"){
            return {...e, blocked: Math.floor((1 - e.frei/e.total) * 100), label: new Date(e.created_at).toLocaleTimeString()}
        }
        return {...e, blocked: Math.floor((1 - e.frei/e.total) * 100), label: new Date(e.created_at).toLocaleDateString()}
    })

    //container display settings
    let container = document.createElement("div");
    container.style.width = "65%"
    //container.style.height = "400px"5
    let cv = document.createElement("canvas");
    container.appendChild(cv);
    detailcontainer.appendChild(container);
    
    //graph erzeugen (line)
    let ctx = cv.getContext("2d");

    const config = {
        type: 'line',
        data: {
            labels: res.map((e) => e.label),
            datasets: [{
              label: 'Auslastung in %',
              data: res.map((e) => e.blocked),
              fill: false,
              borderColor: 'rgb(75, 192, 192)',
              tension: 0.1
            }]
          },
          options: {
            responsive: true,
            scales: {
                y:{
                    max: 100
                }
            }
          }
      };
   
      new Chart(ctx, config);
}
main();


