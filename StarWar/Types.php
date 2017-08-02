<?php
	namespace StarWar;

	use StarWar\Type\CharacterType;
	use StarWar\Type\MovieType;
	use StarWar\Type\QuoteType;
	use StarWar\Type\ScoreInputType;
	use StarWar\Type\QueryType;
	use StarWar\Type\QuizQuestionType;
	use StarWar\Type\QuizAnswerType;
	use StarWar\Type\ScoreType;
	use StarWar\Type\UserType;
	use StarWar\Type\MutationType;
	use StarWar\Type\MovieEnum;
	use GraphQL\Type\Definition\ListOfType;
	use GraphQL\Type\Definition\NonNull;
	use GraphQL\Type\Definition\Type;

	/**
	 * Class Types
	 *
	 * Acts as a registry and factory for your types.
	 *
	 * As simplistic as possible for the sake of clarity of this example.
	 * Your own may be more dynamic (or even code-generated).
	 */
	class Types {
		// Object types:

		/** @var CharacterType */
		private static $character;
		/** @var MovieType */
		private static $movie;
		/** @var QuoteType */
		private static $quote;
		/** @var ScoreInputType */
		private static $scoreInput;
		/** @var QueryType */
		private static $query;
		/** @var QuizQuestionType */
		private static $quizQuestion;
		/** @var QuizAnswerType */
		private static $quizAnswer;
		/** @var ScoreType */
		private static $score;
		/** @var UserType */
		private static $user;
		/** @var MutationType */
		private static $mutation;

		/**
		 * @return CharacterType
		 */
		public static function character() {
			return self::$character ?: (self::$character = new CharacterType());
		}

		/**
		 * @return MovieType
		 */
		public static function movie() {
			return self::$movie ?: (self::$movie = new MovieType());
		}

		/**
		 * @return QuoteType
		 */
		public static function quote() {
			return self::$quote ?: (self::$quote = new QuoteType());
		}

		/**
		 * @return QueryType
		 */
		public static function query() {
			return self::$query ?: (self::$query = new QueryType());
		}

		/**
		 * @return QuizQuestionType
		 */
		public static function quizQuestion() {
			return self::$quizQuestion ?: (self::$quizQuestion = new QuizQuestionType());
		}

		/**
		 * @return QuizAnswerType
		 */
		public static function quizAnswer() {
			return self::$quizAnswer ?: (self::$quizAnswer = new QuizAnswerType());
		}

		/**
		 * @return ScoreInputType
		 */
		public static function scoreInput() {
			return self::$scoreInput ?: (self::$scoreInput = new ScoreInputType());
		}

		/**
		 * @return ScoreType
		 */
		public static function score() {
			return self::$score ?: (self::$score = new ScoreType());
		}

		/**
		 * @return UserType
		 */
		public static function user() {
			return self::$user ?: (self::$user = new UserType());
		}

		/**
		 * @return MutationType
		 */
		public static function mutation() {
			return self::$mutation ?: (self::$mutation = new MutationType());
		}

		// Let's add internal types as well for consistent experience

		/**
		 * @return \GraphQL\Type\Definition\BooleanType
		 */
		public static function boolean() {
			return Type::boolean();
		}

		/**
		 * @return \GraphQL\Type\Definition\FloatType
		 */
		public static function float() {
			return Type::float();
		}

		/**
		 * @return \GraphQL\Type\Definition\IDType
		 */
		public static function id() {
			return Type::id();
		}

		/**
		 * @return \GraphQL\Type\Definition\IntType
		 */
		public static function int() {
			return Type::int();
		}

		/**
		 * @return \GraphQL\Type\Definition\StringType
		 */
		public static function string() {
			return Type::string();
		}

		/**
		 * @param Type $type
		 * @return ListOfType
		 */
		public static function listOf($type) {
			return new ListOfType($type);
		}

		/**
		 * @param Type $type
		 * @return NonNull
		 */
		public static function nonNull($type) {
			return new NonNull($type);
		}
	}
