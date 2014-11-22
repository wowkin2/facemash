<?
$rate_o = $_POST['winr']; // начальный рейтинг победителя
$rate_t = $_POST['loser']; // начальный рейтинг проигравшего
$rounds_o = $_POST['winv']; // количество побед и поражений у победителя
$rounds_t = $_POST['losev']; // количество побед и поражений у проигравшего

// расчет коэффициента
function value($rate, $rounds) {
    if (($rounds > 30) and ($rate > 2400)) {
        $value = 10;
    }
    elseif (($rounds > 30) and ($rate < 2400)) {
        $value = 15;
    }
    elseif ($rounds <= 30) {
        $value = 25;
    }
    return $value;
}

// разница рейтингов по модулю
$rate_sum = $rate_o - $rate_t;

// расцет вероятности победы
include 'possibility.php'; // тут инклудим массив коэфициентов

// победа и положение
$win_or_lose_o = 1;
$win_or_lose_t = 0;

$coef = 1 - possibility($rate_sum);

$result_o = $rate_o + value($rate_o, $rounds_o) * (1-$coef); // новый рейтинг победителя
$result_t = $rate_t + value($rate_t, $rounds_t) * (- $coef); // новый рейтинг проигравшего


$changed_o = round($result_o - $_POST['winr']); // сколько очков получил победитель
$changed_t = round($_POST['loser'] - $result_t); // сколько очков получил проигравший
?>