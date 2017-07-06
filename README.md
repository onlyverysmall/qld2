## Go go gadget GraphQL
Run the server via command line: 
```
php -S localhost:8080 ./graphql.php
```

## Browser + docs
[GraphiQL](https://github.com/graphql/graphiql) is an in-browser tool for exploring GraphQL APIs. I did not want to mess with setting all that up, so I just installed a Chrome extension for it (I used [this one](https://chrome.google.com/webstore/detail/graphiql-feen/mcbfdonlkfpbfdpimkjilhdneikhfklp?hl=en-US)).

Either way, it will allow you to play around with the API without any other tools, AND it parses the GraphQL types and provides documentation of the schema, which is super fancy.

Set your server to `http://localhost:8080` 

## Queries

The [GraphQL docs](http://graphql.org/learn/queries/) will explain this better than I can. 
 
## Sample query 
TODO: There are a bunch of default types not represented in this data set. Also, it only supports queries (not mutations).

The following query returns pretty much all of the sample data, which can be found (and added to!) in `/StarWar/Data/DataSource.php`.

```
{
  viewer {
    ...charData
  }
	rey: character(id: 1) {
    ...charData
  }
  leia: character(id: 2) {
		...charData
  }
  maz: character(id: 3) {
    ... charData
  }
  movies {
    title
    totalQuoteCount
    quotes(after: 1) {
      ... quoteInfo
      replies {
        ... quoteInfo
      }
    }
  }
  lastMoviePosted {
    title
  }
}

fragment charData on Character {
    email
    firstName
    lastName
}

fragment quoteInfo on Quote {
  body
  character {
    ... charData    
  }
  totalReplyCount
}
```