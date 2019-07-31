<?php

return [

    /*

     */
    'enabled' => env('ACTIVITY_LOGGER_ENABLED', true),

    /*
     * Cuando se ejecuta el comando de limpieza, todas las actividades de grabación anteriores a
     * El número de días especificado aquí será eliminado..
     */
    'delete_records_older_than_days' => 365,

    /*
     * Si no se pasa ningún nombre de registro a la actividad () helper
     * usamos este nombre de registro predeterminado.
     */
    'default_log_name' => 'default_name',

    /*
     * Aquí puede especificar un controlador de autenticación que obtenga modelos de usuario.
     * Si esto es nulo, usaremos el controlador de autenticación Laravel predeterminado.
     */
    'default_auth_driver' => null,

    /*
  * Si se establece en verdadero, el sujeto devuelve los modelos borrados.
     */
    'subject_returns_soft_deleted_models' => false,

    /*
    * Este modelo se utilizará para registrar la actividad.
     * Debería ser implementado la interfaz de Spatie \ Activitylog \ Contracts \ Activity
     * y extender Illuminate \ Database \ Eloquent \ Model.
     */
    'activity_model' => App\Models\varias\Activity::class,
//    'activity_model' => \Spatie\Activitylog\Models\Activity::class,

    /*
     * This is the name of the table that will be created by the migration and
     * used by the Activity model shipped with this package.
     */
    'table_name' => 'activity_log',
];
