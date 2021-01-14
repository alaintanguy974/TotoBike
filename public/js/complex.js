window.onload = function() {
    function testAjax() {
        $.ajax({
            url: "/json/brand-cat",
            success: function(data) {
                var labels = [];
                var datas = [];
                var backgroundColors = [];
                for (var i = 0; i < data.length; i++) {
                    labels[i] = data[i].category_name;
                    datas[i] = data[i].nbr;
                    backgroundColors[i] = 'rgba(255, 99, 132, 0.2)';
                }

                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'nombre de marque par categorie',
                            data: datas,
                            backgroundColor: backgroundColors
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

            },
            error: function(e) {
                alert("erreur");
            }
        });
    }
    testAjax();



}