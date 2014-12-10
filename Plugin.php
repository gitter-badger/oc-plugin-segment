<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Segment
 */

namespace AxC\Segment;

/**
 * Segment Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = ['AxC.Framework'];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'				=> 'Segment',
			'description'	=> trans('axc.segment::lang.plugin.description'),
			'author'			=> 'Alex Carrega',
			'icon'				=> 'icon-share-alt'
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return ['AxC\Segment\Components\Segment' => 'segment'];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'				=> trans('axc.segment::lang.settings.label'),
				'icon'				=> 'icon-share-alt',
				'description'	=> trans('axc.segment::lang.settings.description'),
				'class'				=> 'AxC\Segment\Models\Settings',
				'category'		=> \AxC\Framework\Models\Settings::CATEGORY_AXC,
				'order'				=> 4
			]
		];
	}
}
