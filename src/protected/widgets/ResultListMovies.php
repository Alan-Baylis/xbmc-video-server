<?php

/**
 * ResultList implementation for movies
 *
 * @author Sam Stenvall <neggelandia@gmail.com>
 * @copyright Copyright &copy; Sam Stenvall 2014-
 * @license https://www.gnu.org/licenses/gpl.html The GNU General Public License v3.0
 */
class ResultListMovies extends ResultList
{

	public function getColumnDefinitions()
	{
		return array(
			$this->getLabelColumn(),
			$this->getYearColumn(),
			$this->getGenreColumn(),
		);
	}

}
