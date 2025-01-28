<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;
use Nette\Utils\Arrays;

use function Psy\debug;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return Response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    /*
    public function register(Request $request) {
        $response = ["success" => false];
    
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            $response = ["error" => $validator->errors()];
            return response()->json($response, 200);
        }
    
        $input = $request->all();
        $input["password"] = bcrypt($input['password']);
    
        $user = User::create($input);
        $response["success"] = true;
    
        return response()->json($response, 200);
    } */

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'token' => $token,
            'user' => $user,
        ], 200);
        // if (!Auth::attempt($request->only('email', 'password'))) {
        //     return Response()->json(['message' => 'Unauthorized'], 401);
        // }

        // $user = User::where('email', $request['email'])->firstOrFail();

        // if ($user == null) {
        //     return Response()->json(['message' => 'Usuario no encontrado'], 401); // Personalizar salida
        // }

        // if ($user->tokens()->count() > 0) {
        //     return Response()->json(['message' => 'Ya ha iniciado sesion'], 401); // Personalizar salida
        // }

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json([
        //     'message' => 'Hola Bienvenid@ ' . $user->name,
        //     'access_token' => $token,
        //     'token_type' => 'Bearer',
        //     'user' => $user,
        // ]);
    }
    /*
    public function login(Request $request){
        $response = ["success" => false];
    
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            $response = ["error" => $validator->errors()];
            return response()->json($response, 200);
        }

        if(auth()->attempt(['email' =>$request->email, 'password' =>$request->password])){
            $user = auth()->user();
            $response['token'] = $user->createToken("auth_token")->plainTextToken;
            $response['user'] = $user;
            $response['success'] = true;
        }
        return response()->json($response, 200);
    } */

    public function logout(Request $request)
    {

        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Cierre de sesión exitoso'], 200);
        // $tokenDeUsuario = false;
        // $sesionTerminada = false;
        // $token = $request->bearerToken();
        // $userId = $request->id;
        // $user = User::find($userId);

        // if ($token == null) {
        //     return "Unauthorized"; // Personalizar salida
        // }

        // $tokenId = substr($token, 0, 1); // Recuperar Id de token

        // $userTokens = PersonalAccessToken::where('tokenable_id', $userId)->get(); //Recuperar los tokens del usuario

        // foreach ($userTokens as $userToken) {
        //     if ($tokenId == $userToken->id) { // Verifica que el token le pertenezca al usuario
        //         $tokenDeUsuario = true;
        //     }
        // }

        // if ($tokenDeUsuario && $user->tokens()->delete()) {
        //     $sesionTerminada = true;
        // }

        // if ($sesionTerminada == 0) {
        //     return "No has iniciado sesion"; // Personalizar salida
        // } else {
        //     return "Has terminado sesion"; // Personalizar salida
        // }
    }
    /*
    public function logout(){
        $response = ["success"=>false];
        auth()->user()->tokens()->delete();
        $response=[
          "success"=>true,
          "message"=>"Sesion Cerrada"
        ];

        return response()->json($response, 200);
    }*/
}
