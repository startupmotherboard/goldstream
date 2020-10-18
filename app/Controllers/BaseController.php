<?php
namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\TemplatesModel;
use App\Models\UserModel;
use App\Models\UserProfileModel;

use App\Models\HomeBuyerModel;
use App\Models\HomeRequestModel;
use App\Models\MessagesModel;
/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form','url','text'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		
			$security = \Config\Services::security();
		$this->session = \Config\Services::session();
		 $session = session()->start();
		 
		$this->SettingModel =  new SettingModel();
		$this->TemplatesModel =  new TemplatesModel();
		$this->UserModel =  new UserModel();
		$this->UserProfileModel =  new UserProfileModel();
		
		$this->HomeBuyerModel =  new HomeBuyerModel();
		$this->HomeRequestModel =  new HomeRequestModel();
		$this->MessagesModel =  new MessagesModel();
	}	
		public function common_data(){
			$common_data=array();
			$is_logged=false;
			$user_data=$this->session->get('user_data');	
			if(!empty($user_data)) $is_logged=true;
			$common_data['is_logged']=$is_logged;
			$common_data['user_data']=$user_data;
			$settings=$this->SettingModel->getByMetaKey();
			$common_data['settings']=$settings;
			return $common_data;
		}
	

}
