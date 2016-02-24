$(document).ready(function() {
    c3.generate({
        bindto: '#buildChart',
        data: {
            // iris data from R
            columns: [
                ['Passed', 1284],
                ['Failed', 195],
                ['Errored', 93],
                ['Cancelled', 1]
            ],
            type : 'pie',
            colors: {
                Passed: '#30B43E',
                Failed: '#D4282B',
                Errored: '#C06C61',
                Cancelled: '#898B95'
            }
        }
    });
});