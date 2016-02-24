$(document).ready(function() {
    c3.generate({
        bindto: '#breakerChart',
        data: {
            columns: [
                ['Errored', 6.61, 6.22, 1.50, 0],
                ['Broken', 2.87, 6.92, 2.26, 0],
                ['Still Failing', 8.48, 7.05, 8.27, 0],
                ['Cancelled', 0, 0.14, 0, 0]
            ],
            type: 'bar',
            groups: [
                ['Failed', 'Cancelled'],
                ['Broken', 'Still Failing' ]
            ],
            colors: {
                Passed: '#30B43E',
                Errored: '#D4C32B',
                Broken: '#DE0B19',
                "Still Failing": '#C08D32',
                Cancelled: '#898B95'
            }
        }, axis: {
            x: {
                type: 'category',
                categories: ['allejo', 'alezakos', 'tw1sted', 'ashvala']
            },
            y: {
                tick: {
                    format: function (p) {
                        return p + "%"
                    }
                }
            }
        },
        grid: {
            y: {
                lines: [{value:2.87},{value:6.92},{value:2.26}]
            }
        }
    });
});

//User:   break + stillfail +  error + passed
//allejo: 20      59           46      571
//tw1sted 03      11           2       117
//ashavla 0                    0       17
//sauto   0       1            0       1
//alez    50      51           45      577        1 cancel.
//
// ['allejo', 11.42, 6.65, 0],
// ['alezakos', 13.95, 6.22, 0.14],
// ['tw1sted', 10.53, 15.04, 0],
// ['ashvala', 0, 0, 0]