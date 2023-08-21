<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function createReservation(Request $request)
    {
        // Valider les données du formulaire de création de réservation
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'car_id' => 'required|exists:car,id', 
            'user_id' => 'required|exists:users,id',
        ]);

        // Récupérer les données du formulaire
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $carId = $request->input('car_id');
        $userId = $request->input('user_id');

        // Créer la réservation dans la base de données en utilisant la méthode createReservation du modèle Reservation
        Reservation::createReservation($startDate, $endDate, $carId, $userId);

        // Rediriger l'utilisateur vers la page de réservation avec un message de succès
        return redirect()->route('reservation')->with('success', 'Reservation created successfully');
    }

    public function deleteReservation($id)
    {
        try {
            // Chercher la réservation par son ID, renverra une exception si la réservation n'est pas trouvée
            $reservation = Reservation::findOrFail($id);
    
            // Vérifier si l'utilisateur est autorisé à supprimer la réservation
            if (auth()->check()) {
                // Supprimer la réservation
                $reservation->delete();
    
                // Rediriger avec un message de confirmation
                return redirect()->route('reservation')->with('success', 'Reservation deleted successfully!');
            } else {
                // Si l'utilisateur n'est pas authentifié, rediriger vers la page de connexion avec un message d'erreur
                return redirect()->route('login')->with('error', 'You must be logged in to delete a reservation.');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Si la réservation n'est pas trouvée, rediriger avec un message d'erreur
            return redirect()->route('reservation')->with('error', 'Reservation not found.');
        }
    }
}
