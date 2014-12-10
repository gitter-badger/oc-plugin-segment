<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Segment\Components
 */

namespace AxC\Segment\Components;

/**
 * Segment component class.
 */
class Segment extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.segment::lang.component.name'),
			'description'	=> trans('axc.segment::lang.component.description')
		];
	}

	/**
	 * The CMS controller executes this method every time when the page or layout loads.
	 * Set the Segment Write Key with the Settings value.
	 * @return null
	 */
	public function onRun()
	{
		$this->page['write_key'] = \AxC\Segment\Models\Settings::get('write_key');
	}
}