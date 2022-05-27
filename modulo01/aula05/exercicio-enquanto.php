<select>
    <option selected> -- Selecione o Ano --</option>

<?php
/* $ano = 1900;

while($ano <= 2022){
    echo "<option>{$ano} </option>";
    $ano++;
} */

$ano = 2022;

while($ano >= 1900){
    echo "<option>{$ano} </option>";
    $ano--;
}
?>
</select>