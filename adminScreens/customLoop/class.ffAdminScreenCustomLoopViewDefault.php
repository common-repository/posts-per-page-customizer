<?php

class ffAdminScreenCustomLoopViewDefault extends ffAdminScreenView {


	protected function _render() {

		$structureCustomLoopOptions = $this->_getStructure();
		
		$printer = ffContainer::getInstance()->getOptionsFactory()->createOptionsPrinterBoxed( $this->_getDataStorage()->getOption('custom-loop-data') , $structureCustomLoopOptions );
		$printer->setNameprefix('custom-loop');
		echo '<div class="wrap">';
		echo '<h2>Custom Loops</h2>';
		
				echo 'This is a light version. It works for only the very first one Custom Loop <a target="_blank"  class="button button-primary button-hero" href="http://freshface.net/extern-links/custom-loops-to-custom-loops.php">Purchase PRO</a>';
        echo '<br><br>';
		
		echo '<form method="post" class="ff-options-form">';
		echo '<br/>';
		$printer->walk();
		
		
		echo '<p><input type="submit" name="" class="button button-primary action ff-form-submit" value="Save Changes" /></p>';
		echo '</form>';
		echo '</div>';

        echo 'This is a light version. It works for only the very first one Custom Loop <a target="_blank"  class="button button-primary button-hero" href="http://freshface.net/extern-links/custom-loops-to-custom-loops.php">Purchase PRO</a>';
        echo '<br><br>';
	}

	private function _getDataStorage() {
		return ffContainer::getInstance()->getDataStorageFactory()->createDataStorageWPOptionsNamespace( ffPluginFreshCustomLoop::OPTIONS_NAMESPACE );
	}
	
	public function actionSave( ffRequest $request ) {
		$structure = $this->_getStructure();
		$postReader = ffContainer::getInstance()->getOptionsFactory()->createOptionsPostReader($structure);
		$data = $postReader->getData('custom-loop');
		
		if( !empty( $data ) ) {
			$this->_getDataStorage()->setOption('custom-loop-data', $data);
		}
	}
	
	private function _getStructure() {
		$structureCustomLoopOptions = ffContainer::getInstance()->getOptionsHolderFactory()->createOptionsHolder('ffOptionsHolderCustomLoop')->getOptions();
		return $structureCustomLoopOptions;
	}
	 

	protected function _requireAssets() {

	}

	protected function _setDependencies() {

	}

	public function ajaxRequest( ffAdminScreenAjax $ajax ) {

	}
}