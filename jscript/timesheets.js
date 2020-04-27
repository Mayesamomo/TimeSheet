$(document).ready(function () {
var sum = 0;
        $(".hour").focus(function () {
$(this).values('id');
        sum = 0;
        calculateSum();
        function calculateSum() {
        $(".hour").each(function () {
        if ((this.value) && this.value.length == 10 && this.value.length = <10) {
                sum += parseFloat(this.value);
}
});
$(".sum").html(sum);
}
});
$("div").focusout(function () {
                $(".sum").html(sum);
});
$('.reset').click(function() {
                $(".sum").html(0);
                sum = 0;
});
$('.submit').click(function() {
                var overTime = (sum - 40);
                $(".over-time").html(overTime);
                if (sum > 40 && sum <= 49) {
        $('#over40').modal();
} else if (sum > 49) {
                $('#over49').modal();
} else {
                $('#under40').modal();
}
});
});
});