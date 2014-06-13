
var footballdb_widget_new = function( widget_id, api_path_prefix ) {
  
  var _api_path_prefix = '';
  var _$widget;
  
  function _init( widget_id, api_path_prefix )
  {
    _api_path_prefix = api_path_prefix;
    _$widget  = $( widget_id );
  }

  function _update( event_key, round_pos )
  {
    var api_link = _api_path_prefix + "/event/" + event_key + "/round/" + round_pos + '?callback=?';
    
    $.getJSON( api_link, function(json) {
    
      var snippet = "";  // build up a hypertext (html) snippet to add/append
  
      // snippet += "<h3>";
      // snippet += json.event.title;
      // snippet += " - ";
      // snippet += json.round.title;
      // snippet += "</h3>";

      $.each( json.games, function( index, game ) {
      snippet += '<div class="col-md-10 match-item">';
          snippet += '<div class="col-xs-4">';
            snippet += game.team1_title;
            snippet += '<span class="flag circle ';
            snippet += game.team1_key;
            snippet +='"></span>';
          snippet += '</div>';
          snippet += '<div class="col-xs-4">';
            snippet += '<span>VS</span>';
            snippet += '<span class="result pull-left">';
            if (game.score1 != null) {
              snippet += game.score1;
            }
            snippet += '</span>';
            snippet += '<span class="result pull-right">';
            if (game.score2 != null) {
              snippet += game.score2;
            }
            snippet += '</span>';
          snippet += '</div>';
          snippet += '<div class="col-xs-4">';
            snippet += game.team2_title;
            snippet += '<span class="flag circle ';
            snippet += game.team2_key;
            snippet += '"></span>';
          snippet += '</div>';
          snippet += '<div class="clearfix"></div>';
        snippet += '</div>';
        snippet += '<div class="mtch-data col-md-8">';
          snippet += game.play_at;
        snippet += '</div>';
    });
  
    _$widget.html( snippet );
    });  // getJSON
  }  // fn _update

  // call c'tor/constructor
  _init( widget_id, api_path_prefix );

  // return/export public api
  return {
     update: _update
  }
  
} // fn football_widget_new
