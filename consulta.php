SELECT pa_indicadores_medicion.IdIndicadoresMedicion, pa_indicadores.IdIndicador, pa_indicadores.IdArea, pa_indicadores.Indicador, pa_indicadores_medicion.Medicion, pa_indicadores_medicion.Fecha, pa_indicadores_medicion.FechaSis
FROM pa_indicadores
JOIN pa_indicadores_medicion ON pa_indicadores_medicion.IdIndicador = pa_indicadores.IdIndicador
WHERE pa_indicadores_medicion.Fecha >= '2014-01-01'
LIMIT 0 , 30