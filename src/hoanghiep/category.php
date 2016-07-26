<?php 


/* gọi function  getCategory 
// tham só truyền vào là một object conllection lấy bằng get hoặc all() 

// <select name="parent_id" class="form-control"> 
// <option value="0">Danh Mục Gốc</option>
// {{ getCategory($catalogs)  }}
// </select>

*/

function getCategory($catalog,$parent_id=0,$char='',$select=0){
// tham số 1 sử lý nhiều hạng mục để thêm mới
// tham số 2 xử lý cho  việc sửa chữa

	foreach ($catalog as $item) {
	$id= $item->id;
	$name = $item->name;

	if($item->parent_id == $parent_id){

		if($select != 0 && $id == $select){
		  echo "<option value='$item->parent_id' selected='selected'>$char $name</option>";
		}else {
			echo "<option  value='$id'>$char $name</option>";
		 }
	     getCategory($catalog,$id,$char.'--');
	  }
	}
}

