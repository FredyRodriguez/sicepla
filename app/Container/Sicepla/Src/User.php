<?php
namespace App\Container\Sicepla\Src;

use App\Container\Sicepla\Src\Proyecto;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use App\Container\Calisoft\Src\Notifications\ResetPassword;



class User extends Authenticatable
{
    use Notifiable;

    protected $table = "TBL_Usuarios";
    protected $primaryKey = "PK_id";

    /**
     *  Roles de el usuario
     * @var array
     */
    const ROLES = ['admin', 'student', 'evaluator'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','telefono','documento','direccion', 'email', 'password', 'foto','FK_RolesId','FK_DepartamentoId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Canal de notificaciones
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'users.' . $this->PK_id;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }



    /**
     * Relacion evaluador -> proyectos asignados
     */
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'TBL_ProyectosAsignados', 'FK_UsuarioId', 'FK_ProyectoId')
            ->withPivot('tipo')
            ->withTimestamps();
    }

    public function departamento(){
        return $this->belongsTo(Departamento::class,'FK_DepartamentoId','id');
    }

    public function rol(){
        return $this->belongsTo(Roles::class,'FK_RolesId','id');
    }

    public function formato(){
        return $this->hasMany();
    }
}
