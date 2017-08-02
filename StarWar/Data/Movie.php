<?php
	namespace StarWar\Data;

	use GraphQL\Utils;

	class Movie {
		/** @var integer */
		public $id;

		/** @var string */
		public $title;

		/**
		 * Movie constructor.
		 * @param array $data
		 */
		public function __construct(array $data) {
			Utils::assign($this, $data);
		}
	}
