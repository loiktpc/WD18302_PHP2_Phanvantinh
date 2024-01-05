<?php 
echo "PC05314 - Lab1.1 Kim Thanh Loi";
$course = [
    'TheDuc' => 'TheDuc',
    'CongDan' => 'CongDan',
    'Toan' => 'Toan'
];
// model tương tác db
function get_Course() {
    global $course ;

    return array_values($course) ;
}
function find_by_semester($semester) {
    global $course ;

    return (array_key_exists($semester, $course ) ? $course[$semester]:'Invalid course') ; 
}
// controller 
$list_of_course = get_Course() ;
$semester  = (!empty($_GET['semeter']) ? $_GET['semeter'] :  '') ;

$course_name = find_by_semester($semester) ;
$page_content = $course_name ; 

// view 
?>
<style>
    :root {
  --arrow-bg: rgba(255, 255, 255, 0.3);
  --arrow-icon: url(https://upload.wikimedia.org/wikipedia/commons/9/9d/Caret_down_font_awesome_whitevariation.svg);
  --option-bg: white;
  --select-bg: rgba(255, 255, 255, 0.2);
}
* {
  box-sizing: border-box;
}
body {
  display: grid;
  place-items: center;
  min-height: 100vh;
  background: linear-gradient(35deg, red, purple);
}
/* <select> styles */
select {
  /* Reset */
  appearance: none;
  border: 0;
  outline: 0;
  font: inherit;
  /* Personalize */
  width: 20rem;
  padding: 1rem 4rem 1rem 1rem;
  background: var(--arrow-icon) no-repeat right 0.8em center / 1.4em,
    linear-gradient(to left, var(--arrow-bg) 3em, var(--select-bg) 3em);
  color: white;
  border-radius: 0.25em;
  box-shadow: 0 0 1em 0 rgba(0, 0, 0, 0.2);
  cursor: pointer;
  color: black !important;
  /* Remove IE arrow */
  &::-ms-expand {
    display: none;
  }
  /* Remove focus outline */
  &:focus {
    outline: none;
  }
  
  /* <option> colors */
  option {
    color: black !important;
    background-color: var(--option-bg);

  }
}

</style>
<h1>Môn:<?= $page_content ?></h1>
<form action="" method="get">
<select name="semeter"  id="">
    <?php foreach($list_of_course  as $item_course) : ?>
        <option value="<?= $item_course  ?>"> <?= $item_course  ?></option>
        <?php endforeach ?>
    </select>
    <button type="submit">xác nhận</button>
</form>





