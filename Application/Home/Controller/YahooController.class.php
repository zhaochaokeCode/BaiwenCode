<?php
namespace Home\Controller;
/*
YAHOO登录
 */
class YahooController{
	public function index(){
		Vendor('YConnect.YConnectClient');
        $yahoo = new YConnectClient();
        dump($yahoo);exit;
		// アプリケーションID, シークレット
		$client_id     = "dj0zaiZpPXJZamNzZUhrZFh6aCZzPWNvbnN1bWVyc2VjcmV0Jng9ZGE-";
		$client_secret = "3a7692b33e5226e9be286953b869a58186d6764c";

		// 各パラメータ初期化
		$redirect_uri = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"];

		// リクエストとコールバック間の検証用のランダムな文字列を指定してください
		$state = "44Oq44Ki5YWF44Gr5L+644Gv44Gq44KL77yB";
		// リプレイアタック対策のランダムな文字列を指定してください
		$nonce = "5YOV44Go5aWR57SE44GX44GmSUTljqjjgavjgarjgaPjgabjgog=";

		$response_type = OAuth2ResponseType::CODE_IDTOKEN;
		$scope = array(
		    OIDConnectScope::OPENID,
		    OIDConnectScope::PROFILE,
		    OIDConnectScope::EMAIL,
		    OIDConnectScope::ADDRESS
		);
		$display = OIDConnectDisplay::DEFAULT_DISPLAY;
		$prompt = array(
		    OIDConnectPrompt::DEFAULT_PROMPT
		);

		// クレデンシャルインスタンス生成
		$cred = new ClientCredential( $client_id, $client_secret );
		// YConnectクライアントインスタンス生成
		$client = new YConnectClient( $cred );
		// Authorizationエンドポイントにリクエスト
		$client->requestAuth(
		    $redirect_uri,
		    $state,
		    $nonce,
		    $response_type,
		    $scope,
		    $display,
		    $prompt
		);
	}

}