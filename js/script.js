//hauptcontainer auslesen
let graphs = document.getElementById("graphs")

async function main(){
    //api request
    let res = await fetch("api/getCurrentData.php").then((d) => d.json());

    //parkhäuser loopen
    for(let parkhaus of res){
        //display settings + weitere HTML elemente
        let maincontainer = document.createElement("div");
        let container = document.createElement("div");
        //container.style.width = "200px"
        //container.style.height = "200px"
        let cv = document.createElement("canvas");
        cv.width = 300;
        cv.height = 300;
        container.appendChild(cv);
        let ctx = cv.getContext("2d");
        
        //label html p element
        let p = document.createElement("p");
        p.innerText = parkhaus.Location;
        
        //click event für weiterleitung auf Detailseite
        p.addEventListener("click", () =>{
            window.location.assign("details.php?parkhaus="+parkhaus.Location+"&time=24h");
        });

        //werte berechnen
        let free = parkhaus.frei;
        let belegt = parkhaus.total - parkhaus.frei;

        //graph erzeugen
        const config = {
            type: 'doughnut',
            data: {
                labels: [
                    'Belegt',
                    'Frei'
                ],
                datasets: [{
                    label: parkhaus.Location,
                    data: [belegt, free],
                    backgroundColor: [
                        '#C22424',
                        '#019C82'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                cutoutPercentage: 60,
                responsive: true,
                plugins: {
                    doughnutlabel: {
                        labels: [
                            {
                                text: `${free}/${parkhaus.total}`,
                                font: {
                                    weight: 'bold'
                                }
                            },
                            {
                                text: `${Math.floor((1-(free/parkhaus.total))*100)} % ausgelastet`
                            }
                        ]
                    }
                }
            }
        };
        new Chart(ctx, config);

        //elemente anzeigen
        maincontainer.appendChild(container)
        maincontainer.appendChild(p);
        graphs.appendChild(maincontainer);
    }
}
main();


