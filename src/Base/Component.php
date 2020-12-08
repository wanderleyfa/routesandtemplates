<?PHP

namespace App\Base;

class Component {

	public static function render ($v0738238615_name, $arguments = []) {
		ob_start();
		if(is_array($arguments)){
			extract($arguments);
		}
		// The name variable was prefixed because extract could override it
		include('./themes/default/components/'.$v0738238615_name.'.php');
		return ob_get_clean();
	}

}
