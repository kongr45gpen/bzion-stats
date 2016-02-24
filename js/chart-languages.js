$(document).ready(function() {
    var colors = ['#85144b', '#3D9970', '#5555dd', '#111111', '#0074D9', '#52C052', '#BF0000', '#E9751A', '#002661'];

    var values = [0.01, 0.04, 0.30, 0.54, 1.07, 3.32, 10.47, 13.43, 70.83];
    var labels = ["Windows Batchfile", "Ruby", "ApacheConf", "UNIX Shell", "Cucumber", "Javascript", "SCSS & CSS", "HTML & Twig", "PHP"];

    var mobile = $(window).width() < 700;

    if (mobile) {
        values = values.reverse();
        labels = labels.reverse();
        colors = colors.reverse();
    }

    values.unshift('Usage');

    c3.generate({
        bindto: '#languageChart',
        data: {
            columns: [values],
            type: 'bar',
            color: function (color, d) {
                return colors[d.index];
            },
            labels: {
                format: function (p) {
                    return p.toFixed(2) + "%"
                }
            }
        },
        axis: {
            rotated: mobile,
            x: {
                type: 'category',
                categories: labels
            },
            y: {
                tick: {
                    format: function (p) {
                        return p + "%"
                    }
                }
            }
        },
        grid: {y: {show: true}},
        legend: {
            show: false
        }
    });
});